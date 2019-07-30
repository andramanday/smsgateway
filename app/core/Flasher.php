<<<<<<< HEAD
<?php

class Flasher{

    public static function setFlash($msg, $act, $type)
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
            'act' => $act,
            'type' => $type
        ];

    }

    public static function flash(){
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible show" role="alert">
                <strong>' . $_SESSION['flash']['msg'] . '</strong> ' . $_SESSION['flash']['act'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            unset($_SESSION['flash']);
        }
    }
=======
<?php

class Flasher{

    public static function setFlash($msg, $act, $type)
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
            'act' => $act,
            'type' => $type
        ];

    }

    public static function flash(){
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible show" role="alert">
                <strong>' . $_SESSION['flash']['msg'] . '</strong> ' . $_SESSION['flash']['act'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            unset($_SESSION['flash']);
        }
    }
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
}