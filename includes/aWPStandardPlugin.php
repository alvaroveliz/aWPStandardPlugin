<?php
/**
 * aWPStandardPlugin
 *
 * @author Alvaro Véliz
 */

class aWPStandardPlugin
{
  private $defaultConfig;  

  public function __construct()
  {
    // Options name must have a slug prefix, in this case: "asp" means A Standard Plugin
    $this->defaultConfig = get_option('asp_default_config');
  }

  public function getAdminOptions()
  {
    add_menu_page( 'aWPStandardPlugin', 'aWPStandardPlugin', 'administrator', 'a_wp_standard_plugin', array($this, 'getAdminSettings'));
  }

  public function getAdminSettings()
  {
    $html = '</pre>
    <div class="wrap">
      <form action="options.php" method="post" name="options">
        <h2>Configure the plugin</h2>' . wp_nonce_field('update-options') . '
        <table class="form-table" width="100%" cellpadding="10">
          <tbody>
            <tr>
              <td>
                <label>App Key</label>
              </td>
              <td>
                <input type="text" name="asp_default_config" value="'.$this->appKey.'" placeholder="" size="30">
              </td> 
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="hidden" name="action" value="update" />
                <input type="hidden" name="page_options" value="asp_default_config" />
                <input type="submit" name="Submit" value="Save Settings" />
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
    <pre>
    ';

    echo $html;
  }

  public function getShortCode($attributes)
  {
    echo "Wake up, Neo.";
  }
}