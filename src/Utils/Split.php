<?php

namespace Utils;

class Split
{
    /**
     * Full link
     *
     * @var string
     */
    public $url;

    /**
     * Host Section
     * e.g. www.baidu.com
     *
     * @var string
     */
    public $host;

    /**
     * Domain
     * e.g baidu.com
     *
     * @var string
     */
    public $domain;

    public $domainPrefix;

    /**
     * Query String
     *
     * @var array
     */
    public $query;

    /**
     * Slashes
     * e.g https://github.com/neverbehave/RSSHub-Generator
     * ['neverbehave', 'RSShub-Generator']
     *
     * @var array
     */
    public $slash;

    /**
     * Content After #
     * e.g. example.com#aaaa
     *
     * @var string
     */
    public $fragment;

    /**
     * http or https
     *
     * @var string
     */
    public $scheme;

    public function __construct(string $url)
    {
        $this->url = $url;
        // Split the URL into its constituent parts.
        $parse = parse_url($url);
        // Dash !

        if (!empty($parse['host'])) {
            $this->host = $parse['host'];
            $this->domain = $this->parseDomain($parse);
            $this->domainPrefix = $this->parseDomainPrefix($parse);
            $this->query = $this->parseQuery($parse);
            $this->slash = $this->parseSlashes($parse);
            $this->scheme = $this->parseScheme($parse);
            $this->fragment = empty($parse['fragment']) ? '' : $parse['fragment'];
        }
    }

    private function parseDomainPrefix($parser)
    {
        $host = $parser['host'];
        if ($host === self::parseDomain($parser)) {
            return '';
        } else {
            return str_replace($host, "", $this->url);
        }
    }

    private static function parseDomain($parser)
    {
        $host = $parser['host'];
        $section = explode('.', $host);
        if (($c = count($section)) <= 2) {
            return $host;
        } else {
            return $section[$c - 1] . '.' . $section[$c - 2];
        }
    }

    private static function parseQuery($parser): array
    {
        if (empty($parser['query'])) {
            return [];
        }

        parse_str($parser['query'], $query);
        return $query;
    }

    private static function parseSlashes($parser): array
    {
        if (empty($parser['path'])) {
            return [];
        }
        // Remove the leading forward slash, if there is one.
        $path = ltrim($parser['path'], '/');
        // Put each element into an array.
        $elements = explode('/', $path);
        $args = array_filter($elements);
        return $args;
    }

    private static function parseScheme($parser): string
    {
        if (empty($parser['scheme'])) {
            return 'https';
        }
        return $parser['scheme'];
    }
}