<?php

// casts limit as integer if set
if (isset($limit)) {
    (int) $limit;
}

$total = 0;
$output = array();

//checks to see if url is set, and ModX XML service returns 
if (!empty($url) && $modx->getService('rss', 'xmlrss.modRSSParser')) {
    $rss = $modx->rss->parse($url);

    //checks to see if URL returned proper rss feed and is not empty
    if (!empty($rss) && isset($rss->items)) {
        $total = count($rss->items);
        $itemIdx = 0;
        $idx = 0;

        // set variables itemKey, item as each rss feed item
        while (list($itemKey, $item) = each($rss->items)) {
            if ($idx >= $offset) {

                //
                foreach ($item as $key => $value) {
                    $item[$key] = str_replace(array('[',']'),array('&#91;','&#93;'),$item[$key]);
                }

                if (!empty($tpl)) {
                    $output[] = $modx->getChunk($tpl, $item);
                }
                $itemIdx++;
                if ($limit > 0 && $itemIdx+1 > $limit) break;
            }
            $idx++;
        }
    // unfamiliar with ModX error logging system, simpe output for now
    } else {
        return "Failed To Load RSS Feed";
    }
}
$output = implode("\n", $output);

return $output;