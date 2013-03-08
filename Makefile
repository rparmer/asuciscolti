
all:
	true #we aren't really building anything right now... lets just get tests running first

test:
	$(shell `which php` scripts/run-tests.sh --all)

clean:
	$(shell `which php` scripts/run-tests.sh --clean)

.PHONY: all test clean
