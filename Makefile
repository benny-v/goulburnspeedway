#
# Do this old-style, using a simple Makefile to generate my web site.
# This is about a simple as it gets people.
# Seriously, why do you need more than this?
#

.PHONY: server
server:	jekyll serve

.PHONY: push
push:
	git add -A
	git commit -m "site update"
	git push