<?php 

    use Symfony\Component\Templating\Loader\FilesystemLoader;

    use Symfony\Component\Templating\PhpEngine;

    use Symfony\Component\Templating\Helper\SlotsHelper;

    use Symfony\Component\Templating\TemplateNameParser;

    use Symfony\Component\HttpFoundation\Response;

    
    function view($filename, $data = [], $code = 200) {

        $filesystemLoader = new FilesystemLoader(__DIR__.'/views/%name%');

        $templating = new PhpEngine(new TemplateNameParser(), $filesystemLoader);
        $templating->set(new SlotsHelper());

        return new response($templating->render($filename, $data), $code);

    }

    function redirect($path) {

        return new response("", 301, [

            "location" => $path

        ]);
    }

    function notFound() {

        echo "404 page";
  
    }
?>