<?php

namespace Application\Job;

class IndexSearch extends \Concrete\Job\IndexSearch
{
    /**
     * This is a hotfix to avoid index search job issue causing memory exhaustion error
     * @todo remove this override if it's fixed in the future.
     * @see https://github.com/concrete5/concrete5/pull/9502
     * @see https://github.com/concrete5/concrete5/pull/9565
     *
     * @return \Generator
     */
    protected function queueMessages()
    {
        $pages = $users = $files = $sites = 0;

        foreach ($this->pagesToQueue() as $id) {
            yield "P{$id}";
            $pages++;
        }
        foreach ($this->pagesToRemove() as $id) {
            yield "RP{$id}";
            $pages++;
        }
        foreach ($this->usersToRemove() as $id) {
            yield "RU{$id}";
            $users++;
        }
        foreach ($this->filesToRemove() as $id) {
            yield "RF{$id}";
            $files++;
        }
        foreach ($this->sitesToRemove() as $id) {
            yield "RS{$id}";
            $sites++;
        }

        yield 'R' . json_encode([$pages, $users, $files, $sites]);
    }
}