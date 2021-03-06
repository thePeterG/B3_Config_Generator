<?php
/**
 * BigBrotherBot Config File Generator
 * Author: Freelander (Özgür Uysal) <freelander@bigbrotherbot.net>
 * Author URI: http://www.bigbrotherbot.net
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/*-----------------------------------------------------------------------------*
 * URBAN TERROR 4.2 SETTINGS
 *-----------------------------------------------------------------------------*/
$game_name = 'Urban Terror 4.2';

/*******************************************************************************
 * Game Specific Settings
 *******************************************************************************/
$game_specific_settings = False;

/*******************************************************************************
 * Server Settings
 *******************************************************************************/
$server = array (
    'public_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Public IP:'),
        'tooltip'    => _('Enter your game server\'s public IP.'),
        'default'    => '255.255.255.255'
    ),
    'port' => array (
        'formtype'   => 'text',
        'title'      => _('Server Port:'),
        'tooltip'    => _('Enter your game server\'s rcon (admin) port.'),
        'default'    => '28960'
    ),
    'rcon_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon IP:'),
        'tooltip'    => _('Enter your game server\'s rcon IP.'),
        'default'    => '127.0.0.1'
    ),
    'rcon_password' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon Password:'),
        'tooltip'    => _('Enter your rcon password.'),
        'default'    => 'MYrCOnPaSS'
    ),
    'delay' => array (
        'formtype'   => 'text',
        'title'      => _('Delay:'),
        'tooltip'    => _('Delay between each log reading. Set a higher value to consume less disk resources or bandwidth if you remotely connect (ftp or http remote log access).'),
        'default'    => '0.33'
    ),
    'lines_per_second' => array (
        'formtype'   => 'text',
        'title'      => _('Lines per Second'),
        'tooltip'    => _('Number of lines to process per second. Set a lower value to consume less CPU resources.'),
        'default'    => '50'
    ),
    'max_line_length' => array(
        'formtype'   => 'text',
        'title'      => _('Max Line Length'),
        'tooltip'    => _('When sending in-game messages, lines will have at most this number of characters.'),
        'default'    => '80'
    ),
    'game_log' => array (
        'formtype'   => 'multioption',
        'title'      => _('Game Log File:'),
        'tooltip'    => _('Select your game log file location.'),
        'default'    => 'local',
        'options'    => array (
            'local' => array (
                'title'   => _('Local Path'),
                'hide'    => 10,
                'game_log_local' => array (
                    'title'      => _('Local Path:'),
                    'formtype'   => 'text',
                    'tooltip'    => _('Enter full path to your game log file.'),
                    'default'    => '/path/to/games_mp.log'
                )
            ),
            'ftp' => array (
                'title' => _('FTP Location'),
                'hide'  => 11, //Unique number for hide div
                'game_log_ftpadr' => array (
                    'formtype'    => 'text',
                    'title'       => _('FTP Address:'),
                    'tooltip'     => _('Enter FTP address of your game log file including "ftp://" at the beginning.'),
                    'default'     => 'ftp://ftp.example.com/games/games_mp.log'
                ),
                'game_log_ftpusr' => array (
                    'formtype'   => 'text',
                    'title'      => _('FTP User:'),
                    'tooltip'    => _('Enter your ftp user name.'),
                    'default'    => 'ftpuser'
                ),
                'game_log_ftppas' => array (
                    'formtype'   => 'text',
                    'title'      => _('FTP Pass:'),
                    'tooltip'    => _('Enter your ftp password.'),
                    'default'    => 'FtPpASSw0Rd'
                )
            )
        )
    ),
    'permban_with_frozensand' => array (
        'formtype'   => 'select',
        'title'      => _('Permban with Frozen Sand:'),
        'tooltip'    => _("<p>Choose if you want your permanent bans to be sent to the Urban Terror official website.</p> <p>Your server needs to have the auth system active and the auth_owners cvar correctly set.</p> <p>You will have to unban from both B3 and the urbanterror.info website.</p>"),
        'default'    => 'no',
        'options'    => array (
            'yes' => _('yes'),
            'no'  => _('no')
        )
    ),
    'tempban_with_frozensand' => array (
        'formtype'   => 'select',
        'title'      => _('Tempban with Frozen Sand:'),
        'tooltip'    => _("<p>Choose if you want your temporary bans to be sent to the Urban Terror official website.</p> <p>Your server needs to have the auth system active and the auth_owners cvar correctly set.</p> <p>You will have to unban from both B3 and the urbanterror.info website.</p>"),
        'default'    => 'no',
        'options'    => array (
            'yes' => _('yes'),
            'no'  => _('no')
        )
    )
);

/*******************************************************************************
 * Built-in Plugins
 *******************************************************************************/
$builtin_plugins = array (
    'admin'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Admin',
        'tooltip'    => _('This plugin provides main B3 functionalities.'),
        'default'    => '@conf/plugin_admin.ini',
        'checked'    => True,
        'disabled'   => True
    ),
    'adv'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Advertise',
        'tooltip'    => _('Manages your server messages.'),
        'default'    => '@conf/plugin_adv.xml'
    ),
    'afk'   => array (
        'formtype'   => 'plugin',
        'title'      => 'AFK Kick',
        'tooltip'    => _('Take care of AFK players on your server.'),
        'default'    => '@conf/plugin_afk.ini'
    ),
    'banlist'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Banlist',
        'tooltip'    => _('Allows easy sharing of cheater banlist between clans.'),
        'default'    => '@b3/conf/plugin_banlist.xml'
    ),
    'callvote'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Callvote',
        'tooltip'    => _('This plugin provides advanced features related to Urban Terror 4.2 callvotes.'),
        'default'    => '@b3/conf/plugin_callvote.ini'
    ),
    'censor'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Censor',
        'tooltip'    => _('Censor bad words and bad names.'),
        'default'    => '@conf/plugin_censor.xml'
    ),
    'censorurt'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Censor UrT',
        'tooltip'    => _('With this plugin, B3 will mute/slap players who are badmouthing.'),
        'default'    => '@b3/conf/plugin_censorurt.xml'
    ),
    'chatlogger'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Chatlogger',
        'tooltip'    => _('This plugin logs to database and/or file all clients\' messages (chat, team chat, private chat).'),
        'default'    => '@b3/conf/plugin_chatlogger.ini'
    ),
    'cmdmanager'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Commands Manager',
        'tooltip'    => _('Allows to modify command levels and aliases in-game.'),
        'default'    => '@conf/plugin_cmdmanager.ini'
    ),
    'countryfilter'   => array (
        'formtype'   => 'plugin',
        'title'      => 'CountryFilter',
        'tooltip'    => _('This plugin provides an allow/deny mechanism for connecting players based on their Country-IP (GeoIP data). It announces connecting players in the server so you can see where the player is connecting rom. Even if you don\'t have anny countries on the deny list, it\'s still nice to see where your playercrowd is connecting from!'),
        'default'    => '@conf/plugin_countryfilter.ini'
    ),
    'customcommands'   => array (
        'formtype'   => 'plugin',
        'title'      => 'CustomCommands',
        'tooltip'    => _('With this plugin you will be able to create simple commands easily. There is a set of placeholders you can use to specify parameters for your command or reference the player you killed last or the player who killed you last, and more.'),
        'default'    => '@conf/plugin_customcommands.ini'
    ),
    'duel'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Duel',
        'tooltip'    => _('Challenge your friends in a duel.'),
        'default'    => ''
    ),
    'fisrtkill'   => array (
        'formtype'   => 'plugin',
        'title'      => 'FisrtKill',
        'tooltip'    => _('Displays a message to the first kill and first teamkill.'),
        'default'    => '@conf/plugin_fisrtkill.ini'
    ),
    'geowelcome'   => array (
        'formtype'   => 'plugin',
        'title'      => 'GeoWelcome',
        'tooltip'    => _('Simple replacement for the welcome plugin. When the user connect, it broadcast the location using geoip.'),
        'default'    => '@conf/plugin_geowelcome.ini'
    ),
    'ipban'   => array (
        'formtype'   => 'plugin',
        'title'      => 'IPBan',
        'tooltip'    => _('This plugin checks the IP addresses of clients with an active ban or tempban. So in addition to the GUID check, it also checks the IP address belonging to the client with the active (temp)ban and kicks if appropriate.'),
        'default'    => '@b3/conf/plugin_ipban.ini'
    ),
    'jumper'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Jumper',
        'tooltip'    => _('This plugin provides an advanced statistics system for Urban Terror 4.2 Jump servers.'),
        'default'    => '@b3/conf/plugin_jumper.ini'
    ),
    'location'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Location',
        'tooltip'    => _('A BigBrotherBot plugin which adds geolocation capabilities.'),
        'default'    => '@conf/plugin_location.ini'
    ),
    'login'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Login',
        'tooltip'    => _('Enable password authentication for server admins.'),
        'default'    => '@conf/plugin_login.ini'
    ),
    'makeroom'   => array (
        'formtype'   => 'plugin',
        'title'      => 'MakeRoom',
        'tooltip'    => _('Plugin that provides the !makeroom command to free a slot. Will kick the last connected player from the lowest group.'),
        'default'    => '@conf/plugin_makeroom.ini'
    ),
    'netblocker'   => array (
        'formtype'   => 'plugin',
        'title'      => 'NetBlocker',
        'tooltip'    => _('This plugin is an ip (range) blocker. Do not mistake this plugin with a firewall, because it does not provide that kind of security. If you need to secure your system you should use a proper firewall.'),
        'default'    => '@conf/plugin_netblocker.ini'
    ),
    'nickreg'   => array (
        'formtype'   => 'plugin',
        'title'      => 'NickReg',
        'tooltip'    => _('This plugin allows you to register your nickname. No other person can use it.'),
        'default'    => '@conf/plugin_nickreg.ini'
    ),
    'pingwatch'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Ping Watch',
        'tooltip'    => _('Notifies players with high ping.'),
        'default'    => '@conf/plugin_pingwatch.ini'
    ),
    'pluginmanager'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Plugin Manager',
        'tooltip'    => _('Manages your plugins.'),
        'default'    => '@conf/plugin_pluginmanager.ini'
    ),
    'poweradminurt'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Poweradmin UrT',
        'tooltip'    => _('Adds extra admin abilities to default admin plugin.'),
        'default'    => '@b3/conf/plugin_poweradminurt.ini'
    ),
    'spamcontrol'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Spam Control',
        'tooltip'    => _('Warns players who spams the in game chat.'),
        'default'    => '@conf/plugin_spamcontrol.ini'
    ),
    'spawnkill'   => array (
        'formtype'   => 'plugin',
        'title'      => 'SpawnKill UrT 4.2',
        'tooltip'    => _('A BigBrotherBot plugin useful to automatically manage spawnkilling on Urban Terror 4.2 game servers.'),
        'default'    => '@conf/plugin_spawnkill.ini'
    ),
    'spree'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Spree',
        'tooltip'    => _('Spree Plugin.'),
        'default'    => '@conf/plugin_spree.ini'
    ),
    'stats'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Stats',
        'tooltip'    => _('Displays round based stats.'),
        'default'    => '@conf/plugin_stats.ini'
    ),
    'status'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Status',
        'tooltip'    => _('Writes server status to an xml file. This can be used by 3rd party tools to monitor server status.'),
        'default'    => '@conf/plugin_status.ini'
    ),
    'tk'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Team Kill',
        'tooltip'    => _('Punishes team killers.'),
        'default'    => '@conf/plugin_tk.ini'
    ),
    'translator'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Translator',
        'tooltip'    => _('A BigBrotherBot plugin which is capable o translating in-game chat messages into a specified language.'),
        'default'    => '@conf/plugin_translator.ini'
    ),
    'urtserversidedemo'   => array (
        'formtype'   => 'plugin',
        'title'      => 'UrTServerSideDemo',
        'tooltip'    => _('A [BigBrotherBot][B3] plugin to take advantage of the Urban Terror 4.2 server-side demo recording feature. For every server-side demo started, you will find in the B3 log a _INFO_ line with demo filename, player name, player guid and player ip.'),
        'default'    => '@conf/plugin_urtserversidedemo.ini'
    ),
    'welcome'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Welcome',
        'tooltip'    => _('Welcomes players'),
        'default'    => '@conf/plugin_welcome.ini'
    ),
    'xlrstats'   => array (
        'formtype'   => 'plugin',
        'title'      => 'XLRstats',
        'tooltip'    => _('Records all player stats in your database.'),
        'default'    => '@b3/conf/plugin_xlrstats.ini'
    )
);

/*******************************************************************************
 * External Plugins
 *******************************************************************************/
$external_plugins = array (


    'autoreg' => array (
        'formtype'   => 'plugin',
        'title'      => 'AutoReg',
        'tooltip'    => 'This plugin put automatically a player at level 1 after x connections if it did not register.',
        'default'    => '@b3/extplugins/conf/autoreg.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=256'
    ),
    'badnick' => array (
        'formtype'   => 'plugin',
        'title'      => 'BadNick',
        'tooltip'    => 'Can force a player to change his nickname ( if deemed inappropriate ).',
        'default'    => '@b3/extplugins/conf/badnick.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-BadNick-For-B3-1.10/zip/master'
    ),
    'badweaponforyou' => array (
        'formtype'   => 'plugin',
        'title'      => 'BadWeaponForYou',
        'tooltip'    => 'BadWeaponForYou is plugin for Urban Terror for prohibits or not a player from using a weapon or equipment.',
        'default'    => '@b3/extplugins/conf/badweaponforyou.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=267'
    ),
    'contact' => array (
        'formtype'   => 'plugin',
        'title'      => 'Contact',
        'tooltip'    => 'This plugin send an e_mail to the administration server.',
        'default'    => '@b3/extplugins/conf/contact.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=266'
    ),
    'contactlt' => array (
        'formtype'   => 'plugin',
        'title'      => 'Contact LT',
        'tooltip'    => 'Simplified version of the plugin Contact.',
        'default'    => '@b3/extplugins/conf/contact.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-Contact-LT-for-B3-1.10/zip/master'
    ),
    'doubleguid' => array (
        'formtype'   => 'plugin',
        'title'      => 'DoubleGuid',
        'tooltip'    => 'This plugin for avoid to have players with the same quid.',
        'default'    => '@b3/extplugins/conf/doubleguid.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=259'
    ),
    'gotospec' => array (
        'formtype'   => 'plugin',
        'title'      => 'GotoSpec',
        'tooltip'    => 'This plugin for block a player as spectator for a period in minustes or unlimited period.',
        'default'    => '@b3/extplugins/conf/gotospec.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=264'
    ),
    'killassisturt' => array (
        'formtype'   => 'plugin',
        'title'      => 'KillAssistUrT',
        'tooltip'    => 'KillAssistUrT Plugin BigBrotherBot(B3) for Urban Terror (*can work with other games).',
        'default'    => '@b3/extplugins/conf/killassisturt.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=262'
    ),
    'pbautojoin' => array (
        'formtype'   => 'plugin',
        'title'      => 'PBAutoJoin',
        'tooltip'    => 'This plugin warn and remits the players that do not meet the auto-join in the good team.',
        'default'    => '@b3/extplugins/conf/pbautojoin.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=261'
    ),
    'pbmuteurt' => array (
        'formtype'   => 'plugin',
        'title'      => 'PBMuteUrT',
        'tooltip'    => 'This plugin can mutate to temporarily or permanently a player. The player is remute after the map changes and after reconnection.',
        'default'    => '@b3/extplugins/conf/pbmuteurt.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=260'
    ),
    'privatemessaging' => array (
        'formtype'   => 'plugin',
        'title'      => 'PrivateMessaging',
        'tooltip'    => 'With this plugin you can write a message to a player who is not on the game server ,the player the message when connecting to the server.',
        'default'    => '@b3/extplugins/conf/privatemessaging.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-Privatemessaging-for-B3-1.10/zip/master'
    ),
    'randommapurt' => array (
        'formtype'   => 'plugin',
        'title'      => 'RandomMapUrT',
        'tooltip'    => 'Selects the next map randomly in your mapcycle.',
        'default'    => '@b3/extplugins/conf/randommapurt.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=258'
    ),
    'randomgametypeurt' => array (
        'formtype'   => 'plugin',
        'title'      => 'RandomGameTypeUrT',
        'tooltip'    => 'Selects the next gametype randomly.',
        'default'    => '@b3/extplugins/conf/randomgametypeurt.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=257'
    ),
    'tagprotect' => array (
        'formtype'   => 'plugin',
        'title'      => 'TagProtect',
        'tooltip'    => 'This plugin to penalize a player that connects to a server of a clan (team), with the tag of the clan(team) without being a member.',
        'default'    => '@b3/extplugins/conf/tagprotect.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=265'
    ),
    'teamspeakviewer' => array (
        'formtype'   => 'plugin',
        'title'      => 'TeamspeakViewer',
        'tooltip'    => 'TeamspeakViewer Plugin by PtitBigorneau.',
        'default'    => '@b3/extplugins/conf/teamspeakviewer.ini',
        'url'        => 'https://codeload.github.com/ptitbigorneau/Plugin-TeamSpeakViewer-For-B3-1.10/zip/master'
    ),
    'templevel' => array (
        'formtype'   => 'plugin',
        'title'      => 'TempLevel',
        'tooltip'    => 'Temporarily change the level to a player, for a few hours or days<br>after this time the player is back to his original level',
        'default'    => '@b3/extplugins/conf/templevel.ini',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&id=263'
    ),
    'topkiller42' => array (
        'formtype'   => 'plugin',
        'title'      => 'TopKiller Urt 4.2+',
        'tooltip'    => ' It counts the kills made by each player and show TOPKILLER player at the end of each round',
        'default'    => '@b3/extplugins/conf/topkiller42.ini',
        'url'        => 'http://ptitbigorneau.fr/UrT42/topkiller42.zip'
    )
);