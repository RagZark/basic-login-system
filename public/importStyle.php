<?php

class Components
{
    private $cdn = "https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css";

    public function create_css()
    {
        echo "<link
        rel=\"stylesheet\"
        href=\"{$this->cdn}\">";
    }
}
