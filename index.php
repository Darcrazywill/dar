<?php
class Page
{
    private $name;
    private $template;
    public function __construct($name, $template)
    {
        $this->name = $name;
        $this->template = $template;
    }

    public function render()
{
    echo $this->template;

}
}
$mainPage = new Page('page', '<div><p>It is a default page</p></div>');
$mainPage->render();


?>
