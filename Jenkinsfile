pipeline {
    agent any

    environment {
        PATH = "C:\\Program Files\\Git\\bin;C:\\Program Files\\PHP\\;%PATH%"
        COMPOSER_HOME = 'C:\\composer'
    }

    stages {
        stage('Clone Repository') {
            steps {
                bat 'git clone https://github.com/taispritsch/api-eventos-full.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'composer install'
                bat 'npm install'
                bat 'npm run prod'
            }
        }

        stage('Run Tests') {
            steps {
                bat '.\\vendor\\bin\\phpunit'
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
