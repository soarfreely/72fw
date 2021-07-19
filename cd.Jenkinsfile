#!groovy
@Library('jenkinslib@share') _

cd {
   // 是否执行composer
   runComposer = 'true'

   www = '/home/soar/CICD/www'

   domain = 'local.7fw'

   // 源码目录
   phpSrc = 'src'

   // 仓库名称
   repositoryName = '72fw'

   // nginx代理端口
   nginxProxyPort = 10081

   // 业务代码仓库地址
   repositoryPath = 'git@github.com:soarfreely/72fw.git'

   // Harbor api　auth
   imageRepositoryAuth = 'YWRtaW46eW91cnNvdWxpc21pbmU='

   // 镜像仓库
   imageRepoUri = '127.0.0.1:5000/library'

   // jenkins2repository 凭据 (业务代码仓库)
   jenkins2repositoryCredentialsId = 'github'

   // jenkins2server凭据 (生产服务器)
   jenkins2serverCredentialsId = 'github'

   // 生产服务器ip
   targetIp = '127.0.0.1'

   // toEmail
   toEmail = '346777749@qq.com'

   // 工程名称
   projectName = 'Gavin-project'

   // gitlab api 凭据
   gitlabApiCredentialsId = 'local-gitlab-api'

   // gitlab　api
   gitlabServer = 'http://172.17.0.3:80/api/v4'

   debug = 'debug'
}