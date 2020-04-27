<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
global $wpdb;
?>
<style>
.wpbot_dashboard_header {
    margin-right: unset !important;
    margin-left: unset !important;
    background: #32373c;
    color: #fff;
    text-align: center;
    border-radius: 5px 5px 0px 0px;
}
.wpbot_addons_section {
    margin-right: unset !important;
    margin-left: unset !important;
    margin-bottom: 10px;
    background: #32373c;
    padding-bottom: 20px;
    border-radius: 0px 0px 5px 5px;
}
.wpbot_single_addon_wrapper2 {
    background: #fff;
    padding: 20px;
}
.wp-chatbot-admin-header, .wp-chatbot-admin-footer {
    padding: 25px;
}
.wpbot_dashboard_header h1 {
    font-size: 30px;
    line-height: 100px;
    margin: 0px;
    color: #fff;
}
.container {
    width: 1170px;
    padding-right: 15px;
    padding-left: 15px;
}
</style>


    <?php if(isset($_GET['action']) && $_GET['action']=='edit'): 
    $hasEdit = false;
    if(isset($_GET['query']) && $_GET['query']!=''){
        $hasEdit = true;
        $id = sanitize_text_field($_GET['query']);
        $table = $wpdb->prefix.'wpbot_response';
        $data = $wpdb->get_row("select * from $table where 1 and id = '".$id."'");
        
    }

    ?>
	<div class="qcwrap">
    <div class="wp-chatbot-wrap">
    <div class="wpbot_dashboard_header container"><h1><?php echo ($hasEdit?'Edit':'Add') ?> Response</h1></div>
    <form method="post" action="">
    <div class="wpbot_addons_section container">
    <div class="wpbot_single_addon_wrapper2">
	<table class="form-table">
		<tbody>
            <tr valign="top">
                <th scope="row">Query</th>
                <td>
                    <input type="text" name="qc_bot_str_query" value="<?php echo ($hasEdit?$data->query:''); ?>" style="width: 400px;" required />
                    <br><i>*Required. Add the query here.</i>
                </td>
            </tr>
            
            <tr valign="top">
                <th scope="row">Response</th>
                <td>	
                    <textarea id="qlcd_wp_chatbot_stop_words" cols="130" rows="10" name="qc_bot_str_response" required><?php echo ($hasEdit?$data->response:''); ?></textarea>
                    <br><i>*Required. Add the response here.</i>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Keyword</th>
                <td>
                    <input type="text" name="qc_bot_str_keyword" value="<?php echo ($hasEdit?$data->keyword:''); ?>" style="width: 400px;" />
                    <br><i>Optional. Add multiple keyword or phrases as comma(,) seperated value. It will help to find the best match result.</i>
                </td>
            </tr>
            <tr valign="top" style="display:none">
                <th scope="row">Intent</th>
                <td>	
                <input type="text" name="qc_bot_str_intent" value="<?php echo ($hasEdit?$data->intent:''); ?>" style="width: 400px;" />
                    <br><i>Optional. Single keyword or Phrase. Leave it empty if you do not need to use this response as a intent. This will add as a custom intent in every intent selection field in wpbot settings. Also the intent can be used as system command to trigger the response.</i>
                <?php if($hasEdit): ?>

                <input type="hidden" name="qc_bot_str_id" value="<?php echo ($data->id); ?>" />

                <?php endif; ?>
                </td>
            </tr>
            
        </tbody>
    </table>
	</div>
    
    <footer class="wp-chatbot-admin-footer">
        <div class="row">
            <div class="text-left col-sm-3 col-sm-offset-3">
                
            </div>
            <div class="text-right col-sm-6">
                <input type="submit" class="button button-primary" name="submit" id="submit" value="Save Settings">
            </div>
        </div>
        <!--                    row-->
    </footer>


    </div></form>
    </div>
    </div>
    <?php else: ?>
	<div class="wrap">
    <h1 class="wp-heading-inline">
    Simple Text Responses</h1>
    <a href="<?php echo add_query_arg( 'action', 'edit', admin_url('admin.php?page=simple-text-response') ); ?>" class="page-title-action">Add New</a>
    <hr class="wp-header-end">

	<p>Create simple text responses and the ChatBot will use advanced search algorithm for natural language phrase matching with user input.</p>
	<p><b>This is a new feature. If you have any feedback to improve this feature or found a bug please report us <a href="https://www.quantumcloud.com/resources/free-support/" target="_blank">here</a>.</b></p>
	
	<form method="post" action="">
    <table class="form-table">
		<tbody>
            <tr valign="top">
                <th scope="row">Phrase matching accuracy</th>
                <td>
                    <input type="text" name="qc_bot_str_weight" value="<?php echo (get_option('qc_bot_str_weight')?get_option('qc_bot_str_weight'):'0.4'); ?>" style="width: 400px;" required />
                    <input type="submit" class="button button-primary" name="submit" id="submit" value="Save Settings">
                    <br><i>Please enter a value between 0 to 1. Higher value means more exact matching of phrases.</i>
                    
                </td>
                
            </tr>
        </tbody>
    </table>
    </form>
	
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <div id="post-body-content">
                <div class="meta-box-sortables ui-sortable">
                    <form method="post">
                        <?php
                        $this->response_list->prepare_items();
                        $this->response_list->display(); ?>
                    </form>
                </div>
            </div>
        </div>
        <br class="clear">
    </div>
    </div>

    <?php endif; ?>
