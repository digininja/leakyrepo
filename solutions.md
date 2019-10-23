# Solutions

There are loads of different ways to find things, here are some...

## Grepping the repo

You can grep the whole repo for a string or regex. Here, we are searching for private keys:

```
git grep "PRIVATE KEY" $(git rev-list --all)
```

This will give an output that looks like this:

```
b14ad8013463856f11a0e007d35590c2565b571a:certs/key.pem:-----BEGIN RSA PRIVATE KEY-----
b14ad8013463856f11a0e007d35590c2565b571a:certs/key.pem:-----END RSA PRIVATE KEY-----
b14ad8013463856f11a0e007d35590c2565b571a:certs/privkey.pem:-----BEGIN ENCRYPTED PRIVATE KEY-----
b14ad8013463856f11a0e007d35590c2565b571a:certs/privkey.pem:-----END ENCRYPTED PRIVATE KEY-----
35faa1406267e882cde54b0aaa783db4b784bb50:certs/key.pem:-----BEGIN RSA PRIVATE KEY-----
35faa1406267e882cde54b0aaa783db4b784bb50:certs/key.pem:-----END RSA PRIVATE KEY-----
35faa1406267e882cde54b0aaa783db4b784bb50:certs/privkey.pem:-----BEGIN ENCRYPTED PRIVATE KEY-----
35faa1406267e882cde54b0aaa783db4b784bb50:certs/privkey.pem:-----END ENCRYPTED PRIVATE KEY-----
46311713093dae4b003f743a9fe7e159134ad52a:certs/key.pem:-----BEGIN RSA PRIVATE KEY-----
46311713093dae4b003f743a9fe7e159134ad52a:certs/key.pem:-----END RSA PRIVATE KEY-----
46311713093dae4b003f743a9fe7e159134ad52a:certs/privkey.pem:-----BEGIN ENCRYPTED PRIVATE KEY-----
46311713093dae4b003f743a9fe7e159134ad52a:certs/privkey.pem:-----END ENCRYPTED PRIVATE KEY-----
```

The first, long ID value is a commit ID, you can check this out like this:

```
git checkout b14ad8013463856f11a0e007d35590c2565b571a
```

You can now browse the files as they were at the point they were committed.

## Grepping the commit log

As users usually put messages into the log every time they commit changes, you can search the log for keywords related to interesting things, here I'm searching for mentions of cert:

```
git log | grep -i -B 4 cert
commit 47f30318537be9ade9320775c973ccd0312ddef5
Author: Robin Wood <robin@digi.ninja>
Date:   Wed Jul 24 21:11:43 2019 +0100

    oops, certs shouldn't be in here
--
commit 35faa1406267e882cde54b0aaa783db4b784bb50
Author: Robin Wood <robin@digi.ninja>
Date:   Wed Jul 24 21:07:19 2019 +0100

    reduced length of cert lifespan
--
commit 46311713093dae4b003f743a9fe7e159134ad52a
Author: Robin Wood <robin@digi.ninja>
Date:   Wed Jul 24 21:02:36 2019 +0100

    Certs for the web site
```

And as above, you can use the commit ID to then checkout the files and have a look at them.

## Listing all filenames

```
git log --pretty=full --name-status --diff-filter=A --all
=======
If you want to see what files were changed, you can do this:

```
git log --pretty=full --name-only --all
commit 5fbc1813cc61f4f897c6729a479cdc2c6f97d7d5 (origin/settings, settings)
Author: Robin <robin@digi.ninja>
Commit: Robin <robin@digi.ninja>

    stuff to find

README.md

commit aaa833ed453bf5d5818445018ade8dd317e0a8eb
Author: Robin <robin@digi.ninja>
Commit: Robin <robin@digi.ninja>

    Updating the port number.

    Moved the database to a different port to keep those sneaky hackers from
    spotting it

settings.yaml
```
