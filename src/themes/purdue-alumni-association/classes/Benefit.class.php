<?php
class Benefit
{
    private $title;
    private $plans;
    private $public_description;
    private $member_description;
    private $public_url;
    private $member_url;
    private $member_url_link_text = "Access Benefit";

    public function __construct($title, $plans, $member_description = "", $member_url = "#")
    {
        $this->title = $title;
        $this->plans = $plans;
        $this->member_description = $member_description;
        $this->member_url = $member_url;
    }

    public function get_the_title()
    {
        return $this->title;
    }

    public function get_the_member_description()
    {
        return $this->member_description;
    }

    public function get_the_member_link()
    {
        return $this->member_url;
    }

    public function get_the_plans()
    {
        return $this->plans;
    }

    public function the_title()
    {
        echo $this->title;
    }

    public function output_the_member_link()
    {
        return "<a href=\"{$this->member_url}\">{$this->member_url_link_text}</a>";
    }

    public function set_member_link_text($string)
    {
        $this->member_url_link_text = htmlspecialchars($string);
    }
}