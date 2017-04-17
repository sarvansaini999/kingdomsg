<?php
class MY_Upload extends CI_Upload {
    var $return_value;
function  __construct($config = array())
{
    parent::__construct($config);
}


 function save_applyInfo( $field = 'file', $return_info = TRUE, $filenames = NULL ){

        // Is $_FILES[$field] set? If not, no reason to continue.
        if ( ! isset($_FILES[$field]))
        {

            $this->ci->set_error('upload_no_file_selected');
            return FALSE;

        }

        //If not every file filled was used, clear the empties

        foreach( $_FILES[$field]['name'] as $k => $n )
        {

            if( empty( $n ) )
            {

                foreach( $_FILES[$field] as $kk => $f )
                {

                    unset( $_FILES[$field][$kk][$k] );

                }

            }

        }

        // Is the upload path valid?
        if ( ! $this->ci->validate_upload_path($field) )
        {

            // errors will already be set by validate_upload_path() so just return FALSE
            return FALSE;
        }

        //Multiple file upload
        if( is_array( $_FILES[$field] ) )
        {

            //$count = count($_FILES[$field]['name']); //Number of files to process

            foreach( $_FILES[$field]['name'] as $k => $file )
            {

                // Was the file able to be uploaded? If not, determine the reason why.
                if ( ! is_uploaded_file($_FILES[$field]['tmp_name'][$k] ) )
                {

                    $error = ( ! isset($_FILES[$field]['error'][$k])) ? 4 : $_FILES[$field]['error'][$k];

                    switch($error)
                    {
                        case 1: // UPLOAD_ERR_INI_SIZE
                            $this->ci->set_error('upload_file_exceeds_limit');
                            break;
                        case 2: // UPLOAD_ERR_FORM_SIZE
                            $this->ci->set_error('upload_file_exceeds_form_limit');
                            break;
                        case 3: // UPLOAD_ERR_PARTIAL
                            $this->ci->set_error('upload_file_partial');
                            break;
                        case 4: // UPLOAD_ERR_NO_FILE
                            $this->ci->set_error('upload_no_file_selected');
                            break;
                        case 6: // UPLOAD_ERR_NO_TMP_DIR
                            $this->ci->set_error('upload_no_temp_directory');
                            break;
                        case 7: // UPLOAD_ERR_CANT_WRITE
                            $this->ci->set_error('upload_unable_to_write_file');
                            break;
                        case 8: // UPLOAD_ERR_EXTENSION
                            $this->ci->set_error('upload_stopped_by_extension');
                            break;
                        default :   $this->ci->set_error('upload_no_file_selected');
                            break;
                    }

                    return FALSE;
                }

                // Set the uploaded data as class variables
                $this->ci->file_temp = $_FILES[$field]['tmp_name'][$k];
                $this->ci->file_size = $_FILES[$field]['size'][$k];
                $this->ci->file_type = preg_replace("/^(.+?);.*$/", "\\1", $_FILES[$field]['type'][$k]);
                $this->ci->file_type = strtolower(trim(stripslashes($this->ci->file_type), '"'));

                if(empty($filenames))
                {
                    $this->ci->file_name = $this->ci->_prep_filename($_FILES[$field]['name'][$k]);                  
                }
                else
                {
                    $this->ci->file_name = $this->ci->_prep_filename($filenames[$k]);
                }

                $this->ci->file_ext  = $this->ci->get_extension($this->ci->file_name);
                $this->ci->client_name = $this->ci->file_name;

                // Is the file type allowed to be uploaded?
                if ( ! $this->ci->is_allowed_filetype())
                {
                    $this->ci->set_error('upload_invalid_filetype');
                    return FALSE;
                }

                // if we're overriding, let's now make sure the new name and type is allowed
                if ($this->ci->_file_name_override != '')
                {
                    $this->ci->file_name = $this->ci->_prep_filename($this->ci->_file_name_override);

                    // If no extension was provided in the file_name config item, use the uploaded one
                    if (strpos($this->ci->_file_name_override, '.') === FALSE)
                    {
                        $this->ci->file_name .= $this->ci->file_ext;
                    }

                    // An extension was provided, lets have it!
                    else
                    {
                        $this->ci->file_ext  = $this->ci->get_extension($this->ci->_file_name_override);
                    }

                    if ( ! $this->ci->is_allowed_filetype(TRUE))
                    {
                        $this->ci->set_error('upload_invalid_filetype');
                        return FALSE;
                    }
                }

                // Convert the file size to kilobytes
                if ($this->ci->file_size > 0)
                {
                    $this->ci->file_size = round($this->ci->file_size/1024, 2);
                }

                // Is the file size within the allowed maximum?
                if ( ! $this->ci->is_allowed_filesize())
                {
                    $this->ci->set_error('upload_invalid_filesize');
                    return FALSE;
                }

                // Are the image dimensions within the allowed size?
                // Note: This can fail if the server has an open_basdir restriction.
                if ( ! $this->ci->is_allowed_dimensions())
                {
                    $this->ci->set_error('upload_invalid_dimensions');
                    return FALSE;
                }

                // Sanitize the file name for security
                $this->ci->file_name = $this->ci->clean_file_name($this->ci->file_name);

                // Truncate the file name if it's too long
                if ($this->ci->max_filename > 0)
                {
                    $this->ci->file_name = $this->ci->limit_filename_length($this->ci->file_name, $this->ci->max_filename);
                }

                // Remove white spaces in the name
                if ($this->ci->remove_spaces == TRUE)
                {
                    $this->ci->file_name = preg_replace("/\s+/", "_", $this->ci->file_name);
                }

                /*
                 * Validate the file name
                 * This function appends an number onto the end of
                 * the file if one with the same name already exists.
                 * If it returns false there was a problem.
                 */
                $this->ci->orig_name = $this->ci->file_name;

                if ($this->ci->overwrite == FALSE)
                {
                    $this->ci->file_name = $this->ci->set_filename($this->ci->upload_path, $this->ci->file_name);

                    if ($this->ci->file_name === FALSE)
                    {
                        return FALSE;
                    }
                }

                /*
                 * Run the file through the XSS hacking filter
                 * This helps prevent malicious code from being
                 * embedded within a file.  Scripts can easily
                 * be disguised as images or other file types.
                 */
                if ($this->ci->xss_clean)
                {
                    if ($this->ci->do_xss_clean() === FALSE)
                    {
                        $this->ci->set_error('upload_unable_to_write_file');
                        return FALSE;
                    }
                }

                /*
                 * Move the file to the final destination
                 * To deal with different server configurations
                 * we'll attempt to use copy() first.  If that fails
                 * we'll use move_uploaded_file().  One of the two should
                 * reliably work in most environments
                 */
                if ( ! @copy($this->ci->file_temp, $this->ci->upload_path.$this->ci->file_name))
                {
                    if ( ! @move_uploaded_file($this->ci->file_temp, $this->ci->upload_path.$this->ci->file_name))
                    {
                        $this->ci->set_error('upload_destination_error');
                        return FALSE;
                    }
                }

                /*
                 * Set the finalized image dimensions
                 * This sets the image width/height (assuming the
                 * file was an image).  We use this information
                 * in the "data" function.
                 */
                $this->ci->set_image_properties($this->ci->upload_path.$this->ci->file_name);


                if( $return_info === TRUE )
                {

                    $return_value[$k] = $this->ci->data();

                }
                else
                {

                    $return_value = TRUE;

                }


            }

            return $return_value;

        }
        else //Single file upload, rely on native CI upload class
        {

            $upload = self::do_upload();

            return $upload;

        }


    }

}

?>