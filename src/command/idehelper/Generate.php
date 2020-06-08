<?php


namespace command\idehelper;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use ank\App;

class Generate extends Command
{
    protected function configure()
    {
        $this
            ->setName('ide-helper:generate')
            // the short description shown while running "php bin/console list"
            ->setDescription('生成代码提示帮助文件')
            //            ->addOption(
            //                'title',
            //                null,
            //                InputOption::VALUE_REQUIRED,
            //                '生成API文档的标题',
            //                'API 文档'
            //            )
            //            ->addOption(
            //                'domain',
            //                null,
            //                InputOption::VALUE_REQUIRED,
            //                '接口域名,例: http://www.xxx.com',
            //                ''
            //            )
            //            ->addOption(
            //                'savePath',
            //                null,
            //                InputOption::VALUE_REQUIRED,
            //                '生成文档保存路径',
            //                App::getInstance()->getSiteRoot()
            //            )
            //            ->addOption(
            //                'tplPath',
            //                null,
            //                InputOption::VALUE_REQUIRED,
            //                '文档模板路径',
            //                realpath(__DIR__ . '/doctpl/doc.html')
            //            )
            //            ->addOption(
            //                'filename',
            //                null,
            //                InputOption::VALUE_REQUIRED,
            //                '生成的文件名',
            //                'api.html'
            //            )
            //            ->addArgument('modulename', InputArgument::REQUIRED, '模块的名字')
        ;
        //            ->addArgument('title', InputArgument::OPTIONAL, 'The title of document.');
        // 配置一个可选参数
        //            ->addArgument('optional_argument', InputArgument::OPTIONAL, 'this is a optional argument')
        //            ->addArgument('name', InputArgument::OPTIONAL, 'Your last name?')
        //             配置选项 isHan，缩写为 -x，可选，不需要值
        //            ->addOption('isHan', 'x', InputOption::VALUE_NONE, '是否汉族');
        // the full command description shown when running the command with
        // the "--help" option
        //            ->setHelp('This command allows you to create a user...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $app     = App::getInstance();
        $appPath = $app->getAppPath();
        $dir     = $appPath . '/.phpstorm.meta.php';
        $str     = file_get_contents(__DIR__ . '/../../tpl/framework.meta.php');
        if (!file_exists($dir)) {
            mkdir($dir, 777, true);
        }
        file_put_contents($dir . '/framework.meta.php', $str);
        $output->writeln('代码提示文件生成成功: ' . $dir . '/framework.meta.php');
        return 0;
    }
}