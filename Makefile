
all:
	true #we aren't really building anything right now... lets just get tests running first

test:
	$(shell `which php` scripts/run-tests.sh)

.PHONY: test
