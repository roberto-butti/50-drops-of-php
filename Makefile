.PHONY = all clean build buildhtml buildpdf phpcs toc

SRCS := content/*.md
OUTPUT := export/50-drops-of-php-light.pdf
HTML := export/output.html

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

all: build ## build Html pages and PDF

build: buildhtml buildpdf

buildhtml: ${HTML} ## build html pages
	@echo "Going to build" ${HTML}

${HTML}: ${SRCS}
	@echo "Creating HTML..."
	php parse.php


buildpdf: ${OUTPUT} ## build PDF file
	@echo "Going to build" ${OUTPUT}

${OUTPUT}: ${SRCS} ibis.php assets/*.html
	@echo "Creating PDF (light)..."
	../../OPEN-SOURCE/ibis/ibis build
	@echo "Creating PDF (dark)..."
	../../OPEN-SOURCE/ibis/ibis build dark


buildsample: ## build sample PDF file
	@echo "Creating PDF sample..."
	../../OPEN-SOURCE/ibis/ibis sample

clean:
	@echo "Cleaning up..."
	@echo "removing (dry run) " ${OUTPUT}

open:
	open ${OUTPUT}


phpcs: ## phpcs
	phpcs -n --standard=PSR12 examples
phpcbf:## phpcbf
	phpcbf --standard=PSR12 examples

listtodo: ## list TODO
	@cat todo.md | grep "^\-\ \["

toc: ## Generating TOC from content files
	@cat content/*.md | grep ^\#  | sed  's/^# /- /g' | sed  's/^## /    - /g' | sed 's/^### /        - /g'
