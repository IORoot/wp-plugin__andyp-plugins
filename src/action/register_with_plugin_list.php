<?php



add_action('register_andyp_plugin', 'register_andyp_plugin', 10, 1);


function register_andyp_plugin($args)
{


    /**
     * Sort out the variables.
     */
    $title   = $args['title'];
    $icon_sm = '<span class="mdi mdi-'.$args['icon'].'" style="color: '.$args['color'].' ; font-size: 1.3em; margin-right:3px; vertical-align:middle;"></span>';
    $icon_xl = '<span class="mdi mdi-'.$args['icon'].'" style="color: '.$args['color'].' ; font-size: 10em; display: block; text-align: center;"></span>';
    $path    = dirname(str_replace(ABSPATH . 'wp-content/plugins', '', $args['path']),3);
    $plugin  = ABSPATH . 'wp-content/plugins' . $path;
    $readme  = $plugin . '/readme.md';

    $message =  '';
    $message .= $icon_xl;
    $message .= '<h3>Plugin Path</h3>';
    $message .= '<code>' . $path . '</code>';


    /**
     * Repo Information
     */
    if (is_dir($plugin . '/.git')){ 
        $message .= '<hr/>';
        $message .= '<h3>Github Repository</h3>';
        $remote  = get_git_remote_url($plugin);
        $message .= '<a href="'.$remote.'" target="_blank">'.$remote.'</a>';
    }

    /**
     * Check if README exists.
     */
    if (file_exists($readme)){
        $message .= '<hr/>';
        $message .= '<h3>README.md</h3>';

        $Parsedown = new Parsedown();
        $readmefile = file_get_contents($readme);
        if ($readmefile){
            $message .= $Parsedown->text($readmefile);
        }
        
    } else {
        $message .= '<hr/>';
        $message .= '<h3>No README.md found.</h3>';
    }



    /**
     * Repo Git Log
     */
    if (is_dir($plugin . '/.git')){ 
        $message .= '<hr/>';
        $message .= '<h3>Git Log</h3>';
        $log = get_git_log($plugin);
        // $message .= '<pre style="background:#242424; color:#fafafa; padding:20px">'.$log.'</pre>';
        $message .= '<div class="ue__codemirror"><textarea>'.$log.'</textarea></div>';
    }
    

    /**
     * 
     * Add a Tab
     * 
     */
    if (function_exists('acf_add_local_field')) {

        acf_add_local_field(
            array(
                'key' => 'field_' . uniqid(),
                'label' => $icon_sm . $title,
                'name' => '',
                'type' => 'tab',
                'parent' => 'group_5fe60b14d73ba',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'left',
                'endpoint' => 0,
            )
        );
    }


    /**
     * 
     * Register it with ACF Plugin List as a Message.
     * 
     */
    if( function_exists('acf_add_local_field') ) {

        acf_add_local_field(
                array(
                'key' => 'field_' . uniqid(),
                'label' => $title,
                'name' => '',
                'type' => 'message',
                'parent' => 'group_5fe60b14d73ba',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '100',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'message' => $message ,
                'new_lines' => 'none',
                'esc_html' => 0,
            )
        );
    }

}



function get_git_remote_url($path = null)
{
    if (empty($path)){ return; }
    if (!is_dir($path . '/.git')){ return; }

    $command = 'cd '. $path . ' ;';
    $command .= 'git remote get-url origin;';

    $remote = shell_exec($command);

    if (!is_string($remote)){ return; }

    return $remote;
}


function get_git_log($path = null)
{
    if (empty($path)){ return; }
    if (!is_dir($path . '/.git')){ return; }

    $command = 'cd '. $path . ' ;';
    $command .= "git log --graph --pretty=format:'%h -%d %s %(%cr) <%an>' --abbrev-commit";

    $log = shell_exec($command);

    if (!is_string($log)){ return; }

    return $log;
}