<?php

/**
 * JRouter application. Temporary until merged with the KDispatcherRouter.
 *
 * @category   Anahita
 *
 * @author     Arash Sanieyan <ash@anahitapolis.com>
 * @author     Rastin Mehr <rastin@anahitapolis.com>
 * @copyright  2008 - 2016 rmdStudio Inc./Peerglobe Technology Inc
 * @license    GNU GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 *
 * @link       http://www.GetAnahita.com
 */
class ComApplicationRouter extends LibApplicationRouter
{
    /**
     * Parses the URI.
     *
     * @param JURI $uri
     */
    public function parse(&$url)
    {
        $this->_fixUrlForParsing($url);

        if (empty($url->path) && !isset($url->query['option'])) {
            $url->path = (get_viewer()->guest()) ? 'pages' : 'dashboard';
        }

        $this->_parse($url);
    }
}
