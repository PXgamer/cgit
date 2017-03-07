# cgit. git CGI interface

`cgit` lets you control a git repository using HTTP get calls.

## Prerequisites
- git
- a web server

## Installation
1. Make a directory for your project (DocumentRoot)
2. Set chmod 777 for the empty directory
3. `git clone git://github.com/slim/cgit.git` in the root directory
4. Init your project tree using cgit by browsing to `server-url/cgit/?init`

## Usage
Command format is :  
```PLAIN
server-url/cgit/?<command>=<arguments>&<command>=<arguments>&...
```

Where the `<command>` parameter is any one of `push`, `pull`, `commit`, `checkout`, etc. and `<arguments>` are the arguments for the specified command.
