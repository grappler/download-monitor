<?php

namespace Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api;

use Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Common\PayPalModel;

/**
 * Class PayoutItemDetails
 *
 * The payout item status and other details.
 *
 * @package Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api
 *
 * @property string payout_item_id
 * @property string transaction_id
 * @property string transaction_status
 * @property \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Currency payout_item_fee
 * @property string payout_batch_id
 * @property string sender_batch_id
 * @property \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\PayoutItem payout_item
 * @property string time_processed
 * @property \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Error errors
 * @property \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Links[] links
 */
class PayoutItemDetails extends PayPalModel
{
    /**
     * The ID for the payout item. Viewable when you show details for a batch payout.
     *
     * @param string $payout_item_id
     * 
     * @return $this
     */
    public function setPayoutItemId($payout_item_id)
    {
        $this->payout_item_id = $payout_item_id;
        return $this;
    }

    /**
     * The ID for the payout item. Viewable when you show details for a batch payout.
     *
     * @return string
     */
    public function getPayoutItemId()
    {
        return $this->payout_item_id;
    }

    /**
     * The PayPal-generated ID for the transaction.
     *
     * @param string $transaction_id
     * 
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;
        return $this;
    }

    /**
     * The PayPal-generated ID for the transaction.
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * The transaction status.
     *
     * @param string $transaction_status
     * 
     * @return $this
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->transaction_status = $transaction_status;
        return $this;
    }

    /**
     * The transaction status.
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->transaction_status;
    }

    /**
     * The amount of money, in U.S. dollars, for fees.
     *
     * @param \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Currency $payout_item_fee
     * 
     * @return $this
     */
    public function setPayoutItemFee($payout_item_fee)
    {
        $this->payout_item_fee = $payout_item_fee;
        return $this;
    }

    /**
     * The amount of money, in U.S. dollars, for fees.
     *
     * @return \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Currency
     */
    public function getPayoutItemFee()
    {
        return $this->payout_item_fee;
    }

    /**
     * The PayPal-generated ID for the batch payout.
     *
     * @param string $payout_batch_id
     * 
     * @return $this
     */
    public function setPayoutBatchId($payout_batch_id)
    {
        $this->payout_batch_id = $payout_batch_id;
        return $this;
    }

    /**
     * The PayPal-generated ID for the batch payout.
     *
     * @return string
     */
    public function getPayoutBatchId()
    {
        return $this->payout_batch_id;
    }

    /**
     * A sender-specified ID number. Tracks the batch payout in an accounting system.
     *
     * @param string $sender_batch_id
     * 
     * @return $this
     */
    public function setSenderBatchId($sender_batch_id)
    {
        $this->sender_batch_id = $sender_batch_id;
        return $this;
    }

    /**
     * A sender-specified ID number. Tracks the batch payout in an accounting system.
     *
     * @return string
     */
    public function getSenderBatchId()
    {
        return $this->sender_batch_id;
    }

    /**
     * The sender-provided information for the payout item.
     *
     * @param \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\PayoutItem $payout_item
     * 
     * @return $this
     */
    public function setPayoutItem($payout_item)
    {
        $this->payout_item = $payout_item;
        return $this;
    }

    /**
     * The sender-provided information for the payout item.
     *
     * @return \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\PayoutItem
     */
    public function getPayoutItem()
    {
        return $this->payout_item;
    }

    /**
     * The date and time when this item was last processed.
     *
     * @param string $time_processed
     * 
     * @return $this
     */
    public function setTimeProcessed($time_processed)
    {
        $this->time_processed = $time_processed;
        return $this;
    }

    /**
     * The date and time when this item was last processed.
     *
     * @return string
     */
    public function getTimeProcessed()
    {
        return $this->time_processed;
    }

    /**
     * Sets Errors
     *
     * @param \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Error $errors
     * 
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets Errors
     *
     * @return \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Error
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets Links
     *
     * @param \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Links[] $links
     * 
     * @return $this
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets Links
     *
     * @return \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Links[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Append Links to the list.
     *
     * @param \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Links $links
     * @return $this
     */
    public function addLink($links)
    {
        if (!$this->getLinks()) {
            return $this->setLinks(array($links));
        } else {
            return $this->setLinks(
                array_merge($this->getLinks(), array($links))
            );
        }
    }

    /**
     * Remove Links from the list.
     *
     * @param \Never5\DownloadMonitor\Ecommerce\Dependencies\PayPal\Api\Links $links
     * @return $this
     */
    public function removeLink($links)
    {
        return $this->setLinks(
            array_diff($this->getLinks(), array($links))
        );
    }

}
