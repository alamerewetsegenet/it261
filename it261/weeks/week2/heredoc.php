<?php

# assume that your conditional code is up here ...

# and now you want to print the block of text:

print <<< END
<h1>PHP heredoc Solution 1: Printing a long sequence of HTML text in a PHP script
</h1>
<p>
This is probably the most simple example of using a PHP here document. In this example, you just want to print a block of text from within your PHP<br/>
code. Usually you'll be making some type of calculations, and then printing the block of text depending on the result of those calculations, but in this<br/>
case I'm just going to show you how to print the block of text:<br/>
</p>
END;

# more logic down here...

?>