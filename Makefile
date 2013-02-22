
all:
	true #we aren't really building anything right now... lets just get tests running first

test:
	$(shell ./scripts/run-tests.sh)

.PHONY: test
