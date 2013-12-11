<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: OpenSkyMedia
 * Date: 1/18/12
 * Time: 4:20 PM
 * To change this template use File | Settings | File Templates.
 */

class Ssl {

    public function secure() {

        // Is the current request method secure, via SSL?
        if ( ! isset($_SERVER['https']) )
        {
            // No. Do something here, display an error, redirect... up to you
            show_error("This resource must be accessed through an SSL encrypted connection.");
        }
}

}
