import tidy

options = dict(output_xhtml=True,
               add_xml_decl=True,
               doctype='strict',
               indent='auto',
               tidy_mark=False,
               hide_comments=True,
               wrap=100)


class PrettifyMiddleware(object):
    """Prettify middleware"""

    def process_response(self, request, response):
        if response.headers['Content-Type'].split(';', 1)[0] == 'text/html':
            content = response.content
            content = str(tidy.parseString(content, **options))
            response.content = content
        return response
