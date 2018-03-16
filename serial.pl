#!C:\Perl\bin\perl.exe
# The above line is perl execution path in xampp
# The below line tells the browser, that this script will send html content.
# If you miss this line then it will show "malformed header from script" error.
print "Content-type: text/plain\n\n";
use strict;
use warnings;
use Win32;
require 5.003;
use Win32::SerialPort ':STAT', '0.19';
my $PortObj;
my $string_in;
my $port;
my $baudrate;
$port = "COM7";
$baudrate = "9600";
$PortObj = new Win32::SerialPort ($port) || die "Can't open $port: $^E\n";
# $PortObj->user_msg(ON);
$PortObj->databits(8);
$PortObj->baudrate($baudrate);
$PortObj->parity("none");
$PortObj->stopbits(1);
$PortObj->handshake("rts");
$PortObj->buffers(4096, 4096);
$PortObj->error_msg(1);  # prints major messages like "Framing Error"
$PortObj->user_msg(1);
$PortObj->write_settings || undef $PortObj;
# $PortObj->save($Configuration_File_Name);
$PortObj->read_interval(100);    # max time between read char (milliseconds)
$PortObj->read_char_time(5);     # avg time between read char
$PortObj->read_const_time(100);
my ($ser) = @_;
my ($numChars, $c);
my $line = '';
do {
do {
($numChars, $c) = $PortObj->read(1);
#print "$numChars read=$c\n";
} while ($numChars < 1);
# print $c;
$line .= $c;
} while ($c ne "\n");
print $line;
$PortObj->close || die "failed to close";
undef $PortObj;