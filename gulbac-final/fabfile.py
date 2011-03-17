from fabric.api import *
import os
#import fabric.contrib.project as project

GIT = 'http://github.com/gulBAC/gulbac_site'
USLA = 'gulbac.org.ar'
DEST_PATH = '/var/www/gulbac.org.ar'
ROOT_PATH = os.path.abspath(os.path.dirname(__file__))
DEPLOY_PATH = os.path.join(ROOT_PATH, 'deploy')

def clean():
    local('rm -rf ./deploy')

def generate():
    genpics()
    local('python ../hyde.py -g -s .')

def regen():
    clean()
    generate()

def runserver():
    """ Levanta un server de prueba en localhost:8080 """
    local('python ../hyde.py -w -s . -k')

def reserve():
    regen()
    serve()

def smush():
    """ Optimiza las imagenes (requiere http://github.com/grosser/smusher) """
    local('smusher ./media/images')

def gitpush():
    """ Subimos todas las modificaciones a git """
    prompt('Por favor agregue un comentario con los cambios: ', key='comentario')
    run('git add *')
    local('git commit -m ' + "comentario")
    run('git push origin master')

def gitupdate():
    """ Actualiza la version local reemplazando todo con lo que haya en el git """
    local('git checkout master -f')
    local('git clean -f')

def gitclone():
    """ Bajamos todo desde git (se usa solo la 1era vez, luego hacer gitupdate) """
    local('git clone ' + GIT)

def gitsetup():
    """ Configura llaves SSH para git en el equipo y  usuario locales  """
    prompt('Ingrese su direccion de email: ', key='email')
    local('ssh-keygen -t rsa -C ' + email)

@hosts(GIT,USLA)
def publish():
    """ Automatiza subida al git y al server en produccion """
    regen()
    gitpush()
    put(DEPLOY_PATH + '/*', DEST_PATH)

def genpics():
    def pordirectorio():
        local('rename "y/A-Z/a-z/" *')      # todos los archivos en lowercase
        
        # cambiamos los arvhivos a #.jpg
        #os.rename(src, dst)
        # movemos <Directorio> a media/galerias/
        # creamos un template de galeria con los enlaces a las fotos en content/galeria/<Directorio>/<Directorio>.html 
        # [![1]({{site.url}}/media/galerias/<Directorio>/1-thumb.jpg)](/media/galerias/<Directorio>/1.jpg)
        # print "[![" + str(a) + "]({{site.url}}/media/galerias/SFD2010/" + str(a) + "-thumb.jpg)](/media/galerias/SFD2010/" + str(a) + ".jpg)"
        # ahora si estamos listo para ejecutar hyde
    #os.path.walk('media/galerias/', pordirectorio(), nombreDir )
