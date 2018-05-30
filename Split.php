<?php

class Split
{
    public $url;
    public $host;
    public $query;
    public $slash;
    public $fragment;
    public $scheme;

    public function __construct(string $url)
    {
        $this->url = $url;
        // Split the URL into its constituent parts.
        $parse = parse_url($url);
        // Dash !

        $this->host = empty($parse['host']) ? '' : $parse['host'];
        $this->query = $this->parseQuery($parse);
        $this->slash = $this->parseSlashes($parse);
        $this->scheme = $this->parseScheme($parse);
        $this->fragment = empty($parse['fragment']) ? '' : $parse['fragment'];
    }

    private function parseQuery($parser): array
    {
        if (empty($parser['query'])) {
            return [];
        }

        parse_str($parser['query'], $query);
        return $query;
    }

    private function parseSlashes($parser): array
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

    private function parseScheme($parser): string
    {
        if (empty($parser['scheme'])) {
            return 'https';
        }
        return $parser['scheme'];
    }
}