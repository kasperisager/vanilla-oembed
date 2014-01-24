<?php if (!defined('APPLICATION')) exit();

$PluginInfo['oembed'] = array(
    'Name'        => 'OEmbed',
    'Description' => 'OEmbed enables you to embed content from a myriad of different providers. Now with Spotify support!',
    'Version'     => '1.3.1',
    'Author'      => 'Kasper K. Isager',
    'AuthorEmail' => 'kasperisager@gmail.com',
    'AuthorUrl'   => 'http://github.com/kasperisager'
);

/**
 * OEmbed plugin for Vanilla
 *
 * @since     1.0
 * @author    Kasper Kronborg Isager <kasperisager@gmail.com>
 * @copyright Copyright © 2013
 * @license   http://opensource.org/licenses/MIT MIT
 */
class OEmbed extends Gdn_Plugin
{
	/**
     * Add OEmbed to discussion pages
     *
     * @since  1.0
     * @param  DiscussionController $Sender
     * @access public
     */
    public function DiscussionController_Render_Before($Sender)
    {
        $Sender->AddCssFile('oembed.css', 'plugins/OEmbed');
        $Sender->AddJsFile('jquery.oembed.js', 'plugins/OEmbed');
        $Sender->AddJsFile('jquery.providers.js', 'plugins/OEmbed');
    }
}
