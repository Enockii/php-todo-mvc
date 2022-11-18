<?php

class TaskEntity
{
    private int $id;
    private string $title;
    private string $description;
    private bool $completed;
    private string $createdAt;
    private string $updatedAt;
    private ?string $completedAt;

    /**
     * @return int|null
     */
    public function getId(): int|null
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return TaskEntity
     */
    public function setId(int $id): TaskEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): string|null
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return TaskEntity
     */
    public function setTitle(string $title): TaskEntity
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return TaskEntity
     */
    public function setDescription(string $description): TaskEntity
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        return $this->completed;
    }

    /**
     * @param bool $completed
     * @return TaskEntity
     */
    public function setCompleted(bool $completed): TaskEntity
    {
        $this->completed = $completed;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return TaskEntity
     */
    public function setCreatedAt(string $createdAt): TaskEntity
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     * @return TaskEntity
     */
    public function setUpdatedAt(string $updatedAt): TaskEntity
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompletedAt(): string
    {
        return $this->completedAt;
    }

    /**
     * @param string $completedAt
     * @return TaskEntity
     */
    public function setCompletedAt(string $completedAt): TaskEntity
    {
        $this->completedAt = $completedAt;
        return $this;
    }

}