<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\PersistentCartSharePage\Dependency\Client;

use Generated\Shared\Transfer\QuoteResponseTransfer;
use Generated\Shared\Transfer\ResourceShareRequestTransfer;

interface PersistentCartSharePageToPersistentCartShareClientInterface
{
    public function getPreviewQuoteResourceShare(ResourceShareRequestTransfer $resourceShareRequestTransfer): QuoteResponseTransfer;
}
