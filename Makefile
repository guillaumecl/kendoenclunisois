
package:
	find . ! -wholename '*.git*' ! -name 'Makefile' -print | zip kendo.zip --filesync -@

all: package

.PHONY: package
