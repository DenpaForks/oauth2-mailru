<?php

namespace Aego\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class MailruResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;
    /**
     * Creates new resource owner.
     *
     * @param array  $response
     */
    public function __construct(array $response = array())
    {
        $this->response = $response[0];
    }
    /**
     * Get user id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['uid'] ?: null;
    }
    /**
     * Get user email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }
    /**
     * Get user firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->response['first_name'] ?: null;
    }
    /**
     * Get user lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->response['last_name'] ?: null;
    }
    /**
     * Get user image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->response['pic_big'] ?: null;
    }
    /**
     * Get user nickname
     *
     * @return string|null
     */
    public function getNick()
    {
        return $this->response['nick'] ?: null;
    }
    /**
     * Get user sex
     *
     * @return string|null
     */
    public function getSex()
    {
        return ($this->response['sex'] == '0' ? 'male' : 'female');
    }
    /**
     * Get user birthday
     *
     * @return string|null
     */
    public function getBirthday()
    {
        return $this->response['birthday'] ?: null;
    }
    /**
     * Get user link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->response['link'] ?: null;
    }
    /**
     * Get user status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return ( $this->response['online'] == 1 ? 'online' : 'offline' );
    }
    /**
     * Get user friends count
     *
     * @return string|null
     */
    public function getFriendscount()
    {
        return $this->response['friends_count'] ?: null;
    }
    /**
     * Get user verification status
     *
     * @return string|null
     */
    public function getVerification()
    {
        return ( $this->response['online'] == 1 ? 'verified' : 'unverified' );
    }
    /**
     * Get user vip status
     *
     * @return string|null
     */
    public function getVip()
    {
        return $this->response['vip'] ?: null;
    }
    /**
     * Get user location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->response['location'] ?: null;
    }
    /**
     * Get user country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->response['location']['country']['name'] ?: null;
    }
    /**
     * Get user city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->response['location']['city']['name'] ?: null;
    }
    /**
     * Get user region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->response['location']['region']['name'] ?: null;
    }
    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}