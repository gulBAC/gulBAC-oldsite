#!/usr/bin/python

#nombreArchivo
#nombreGaleria

a=1
f = open("content/galeria/" + nombreArchivo + "/" + nombreArchivo + '.html','w')

print >>f, '{% extends "galeria.html" %}'
print >>f, "{%load webdesign %}"
print >>f, "{%hyde"
print >>f, "title:" + nombreGaleria
print >>f, "created: 2010-11-18 00:00:01"
print >>f, "%}"

print >>f, "{% block article %}"
print >>f, "{% article %}"
print >>f, "{% excerpt %}"

while a <= 154:
    print >>f, "[![" + str(a) + "]({{site.url}}/media/galerias/" + nombreArchivo + "/" + str(a) + "-thumb.jpg)](/media/galerias/" + nombreArchivo + "/" + str(a) + ".jpg)"
    a=a+1

print >>f, "{% endexcerpt %}"
print >>f, "{% endarticle %}"
print >>f, "{% endblock %}"
