#!groovy
@Library('jenkinslib@share') _

ci {
   // 是否执行composer
   runComposer = 'true'

   www = '/home/soar/CICD/www'

   domain = 'local.7fw'

   // 源码目录
   phpSrc = 'src'

   // 仓库名称
   repositoryName = '72fw'

   // 业务代码仓库地址
   repositoryPath = 'git@github.com:soarfreely/72fw.git'

   // jenkins2repository 凭据 (业务代码仓库)
   jenkins2repositoryCredentialsId = 'github'

   // jenkins2server凭据 (生产服务器)
   jenkins2serverCredentialsId = 'github'

   // 镜像仓库
   imageRepoUri = '127.0.0.1:5000/library'

   // 生产服务器ip
   targetIp = 'www.lysuu.com'

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