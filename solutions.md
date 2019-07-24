# Solutions

There are loads of different ways to find things, here are some...

## Greping the repo

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
