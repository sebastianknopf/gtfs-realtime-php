# GTFS Realtime PHP

Simple wrapper for GTFS-Realtime in PHP based on Google's [Protocol Buffers](https://github.com/protocolbuffers/protobuf-php).

## Usage
The library is kept simple to use for creating and parsing GTFS-Realtime feeds in PHP applications. See
the simple examples for [creating](/examples/create_message.php) and [parsing](/examples/parse_message.php) a feed message.

### Installation
Clone the package into your target directory and run
```
composer update
``` 
in your command line. This will install all dependencies and create your autoloader.

You can use the autoloader by including ```[MainDirectory]/vendor/autoload.php``` in the head section
of your PHP file.

### 

## License
The library package is licensed under "The Unlicense" - For the simple reason that there's
nothing in this code at all, which you could not create for yourself using Google's protoc-Compiler
and the corresponding definition file for GTFS-Realtime.