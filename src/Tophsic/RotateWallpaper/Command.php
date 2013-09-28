<?php

namespace Tophsic\RotateWallpaper;

use Symfony\Component\Console\Command\Command as BasicCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Guzzle\Http\Client;

class Command extends BasicCommand
{
    protected function configure()
    {
        $this
            ->setName('wallpaper:rotate')
            ->setDescription('Rotate Wallpaper')
        ;
        //
        //
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //http://api.flickr.com/services/rest/
        //method=flickr.test.echo&name=value
        $client = new Client('http://api.flickr.com/services/rest/');
        
        echo($client->get('?method=flickr.favorites.getPublicList&user_id=10077548@N04&extras=url_l,url_o&api_key=test')
            ->send()->getBody());
        $output->writeln('<info>End of import</info>');
    }
}