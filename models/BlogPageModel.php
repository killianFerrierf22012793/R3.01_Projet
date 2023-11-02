<?php

/**
 * la Classe BlogPageModel du model directement en lien avec l'orm , on a cette classe pour eviter de trop faire
 * de requete de lecture sur les données des blogs
 *
 * Cette classe principale concerne les données des articles scrapé que l'on charge de la bdd
 *
 * @see UserSite
 * @see ControllerMenu
 * @see ControllerPost
 * @see ControllerSettings
 * @see Blog_Page
 *
 * @package models
 * @since 1.0
 * @version 1.0
 * @category blog
 * @author Tom Carvajal & Killian Ferrier
 */
class BlogPageModel
{
    /**
     * @var int
     */
    private int $PageId;

    /**
     * @var string
     */
    private string $TITLE;

    /**
     * @var string|null
     */
    private ?string $content;

    /**
     * @var string|null
     */
    private ?string $author;

    /**
     * @var int
     */
    private int $UserId;

    /**
     * @var string
     */
    private string $dateP;

    /**
     * @var int
     */
    private int $NumberOfLikes;

    /**
     * @var string|null
     */
    private ?string $UrlPicture;

    /**
     * @var string
     */
    private string $statusP;

    /**
     * @var string
     */
    private string $PostUrl;

    /**
     * @var string
     */
    private string $PostEditUrl;

    /**
     * BlogPageModel constructor.
     * @param int $Id
     */
    public function __construct(int $Id)
    {

        $arrayOfValues = (new Blog_Page())->getValuesById($Id);
        $this->PageId = $arrayOfValues['PageId'];
        $this->TITLE = $arrayOfValues['TITLE'];
        $this->content = $arrayOfValues['content'];
        $this->author = $arrayOfValues['author'];
        $this->UserId = $arrayOfValues['UserId'];
        $this->dateP = $arrayOfValues['dateP'];
        $this->NumberOfLikes = $arrayOfValues['NumberOfLikes'];
        $this->UrlPicture = $arrayOfValues['UrlPicture'];
        if ($this->UrlPicture == null || $this->UrlPicture == "") { // TODO ou si la photo n'existe pas sur le serveur ?
            $this->UrlPicture = Constants::PICTURE_URL_DEFAULT;
        }
        $this->statusP = $arrayOfValues['statusP'];
        $this->PostUrl = "/Post/Blog/" . $this->PageId;
        $this->PostEditUrl = "/Post/BlogEdit/" . $this->PageId;
    }

    /**
     * @return int
     */
    public function getPageId(): int
    {
        return $this->PageId;
    }

    /**
     * @return string
     */
    public function getTITLE(): string
    {
        return $this->TITLE;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->UserId;
    }

    /**
     * @return string
     */
    public function getDateP(): string
    {
        return $this->dateP;
    }

    /**
     * @return int
     */
    public function getNumberOfLikes(): int
    {
        return $this->NumberOfLikes;
    }

    /**
     * @return string
     */
    public function getUrlPicture(): string
    {
        return $this->UrlPicture;
    }

    /**
     * @return string
     */
    public function getStatusP(): string
    {
        return $this->statusP;
    }

    /**
     * @return string
     */
    public function getPostUrl(): string
    {
        return $this->PostUrl;
    }

    /**
     * @return string
     */
    public function getPostEditUrl(): string
    {
        return $this->PostEditUrl;
    }

    /**
     * getter pour recuperer les tags d'un article
     *
     * @return array
     */
    public function getTags(): array
    {
        return (new Blog_categoryPage())->getCategoryByPageId($this->PageId);
    }

    /**
     * verifier si un user a liker un poste
     *
     * @param int $UserId
     * @return bool
     */
    public function isPostBookmarked(int $UserId): bool
    {
        return (new Blog_PageLike())->isBookmarkExist($this->PageId, $UserId);
    }


}