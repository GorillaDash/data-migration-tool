<?php
require __DIR__.'/../vendor/autoload.php';

use Sami\RemoteRepository\GitHubRemoteRepository;
use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($dir = __DIR__.'/../src');

$versions = GitVersionCollection::create($dir)
    ->add('master', 'master');

return new Sami($iterator, array(
    'title'                => 'GorillaDash Data Migration Tool',
    'versions'             => $versions,
    'build_dir'            => __DIR__.'/../documents/%version%',
    'cache_dir'            => __DIR__.'/cache/%version%',
    'default_opened_level' => 2,
    'remote_repository' => new GitHubRemoteRepository('GorillaDash/data-migration-tool', dirname($dir)),
));