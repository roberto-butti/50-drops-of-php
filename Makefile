.PHONY = all clean build buildhtml buildpdf phpcs

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

${OUTPUT}: ${SRCS}
	@echo "Creating PDF..."
	../../OPEN-SOURCE/ibis/ibis build

clean:
	@echo "Cleaning up..."
	@echo "removing (dry run) " ${OUTPUT}

open:
	open ${OUTPUT}


phpcs: ## phpcs
	vendor/bin/phpcs -n --standard=PSR12 src
phpcbf:## phpcbf
	vendor/bin/phpcbf --standard=PSR12 src

listtodo: ## list TODO
	@cat todo.md | grep "^\-\ \["
