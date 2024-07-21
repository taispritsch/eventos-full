pipeline {
    agent any
    
    environment {
        GIT_CREDENTIALS_ID = '30594dfc-863c-4e56-98e8-8091e0d21d7e'
    }

    stages {
        stage('Checkout') {
            steps {
                git credentialsId: "${env.GIT_CREDENTIALS_ID}", url: 'https://github.com/taispritsch/eventos-full.git', branch: 'main'
            }
        }
        
        stage('Install Dependencies') {
            steps {
                // Instalar dependências
                sh 'composer install'
            }
        }
        
        stage('Run Tests') {
            steps {
                // Rodar testes
                sh 'vendor/bin/phpunit'
            }
        }
        
        stage('Deploy') {
            steps {
                // Transferir o conteúdo para o container de homologação
               sh 'scp -r * univates@177.44.248.56:/eventos-full'
            }
        }
    }
    
    post {
        success {
            echo 'Build e Deploy concluídos com sucesso!'
        }
        failure {
            echo 'Ocorreu um erro durante o build ou deploy.'
        }
    }
}
