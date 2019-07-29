# Leaky Repo

This repo will deliberately contain things that shouldn't be found in a repository. I am setting it up ahead of a talk I'll be giving along with [Chris Truncer](https://twitter.com/christruncer) at [Wild West Hackin' Fest](https://www.wildwesthackinfest.com/) 2019. If things go well, I'll also be dropping some new tools to help to automate the search for Git leaks.

For now, you can have a play with tools like [Gitrob](https://github.com/michenriksen/gitrob) and look through [solutions.md](solutions.md) to see what you can find by hand.

## Things to find

* Two sets of TLS certificates, keys etc.
* Some SSH keys
* A set of AWS keys
* Database credentials

## Credits

This repo is built on an original idea by [Kev](https://twitter.com/kev_bite) and [David](https://twitter.com/da_betteridge) which they presented in a workshop at [SteelCon](https://www.steelcon.info). Thanks for the inspiration guys.
