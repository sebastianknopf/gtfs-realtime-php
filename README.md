# GTFS Realtime PHP

Simple wrapper for GTFS-Realtime in PHP based on Google's [Protocol Buffers](https://github.com/protocolbuffers/protobuf-php).

## Usage
The library is kept simple to use for creating and parsing GTFS-Realtime feeds in PHP applications. See
the simple examples for [creating](/examples/create_message.php) and [parsing](/examples/parse_message.php) a feed message.

### Composer Installation
In your application project root run
```
composer require gtfs/realtime-php
```
to install the package and all dependencies. This command will load all packages and update
your autoloader to use the package.

Include ```[MainDirectory]/vendor/autoload.php``` in the head section of your application code to use all required classes in simple way.

### Manual Installation
If you don't want to use composer to install all dependencies, you have to make sure that
all dependencies from [protocolbuffers/protobuf-php](https://github.com/protocolbuffers/protobuf-php) are available
and can be found by your autoloader.

All required classes from the library itself are located in the [src](/src) directory. Make sure
that all these classes can be found by your autoloader.

## License
The library package is licensed under "The Unlicense" - For the simple reason that there's
nothing in this code at all, which you could not create for yourself using Google's protoc-Compiler
and the corresponding definition file for GTFS-Realtime.