<h1>Rss Feeds</h1>

<?php


function getFeed($feed_url)
{

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    echo "<ul>";

    foreach ($x->channel->item as $entry) {
        echo " <li class='rss_feed'> <a class='rss_link' href='$entry->link' title='$entry->title'>" . $entry->title . "</a> " . $entry->description . " </li>";
        $i++;

        if($i==6)
        {break;
        }
    }
    echo "</ul>";
}


getFeed('https://icrowdnewswire.com/feed/');