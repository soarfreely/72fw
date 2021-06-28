#!groovy
# jenkins配置的共享库名称
@Library('jenkinslib@share') _

cicd {
   // 是否执行composer
   runComposer = 'true'

   www = '/home/soar/CICD/www'

   domain = '7fw'

   // 源码目录
   phpSrc = 'src'

   // nginx代理端口
   nginxProxyPort = 10080

   // 仓库名称
   repo = '7fw'

   // 业务代码仓库地址
   repository = 'git@github.com:soarfreely/72fw.git'

   // Harbor api　auth
   imageRepositoryAuth = 'Basic YWRtaW46eW91cnNvdWxpc21pbmU='

   // 镜像仓库
   imageRepoUri = '47.94.221.163:8080/library'

   // jenkins2repository 凭据 (业务代码仓库)
   jenkins2repositoryCredentialsId = 'local-jenkins-github'

   // jenkins2server凭据 (生产服务器)
   jenkins2serverCredentialsId = 'local-php'

   // 生产服务器ip
   targetIp = '47.94.221.163'

   // toEmail
   toEmail = 'soarfreely.z@gmail.com'

   // 工程名称
   projectName = 'Gavin-project'

   // gitlab api 凭据
   gitlabApiCredentialsId = 'local-gitlab-api'

   // gitlab　api
   gitlabServer = 'http://172.17.0.3:80/api/v4'

   debug = 'debug'
}
