<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 10/03/2016
     * Time: 17:17
     */

    namespace UniApiClient\Interfaces;

    /**
     * Interface RequestMethodInterface
     *
     * @package UniApiClient\Interfaces
     */
    interface RequestMethodInterface {

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function get($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function head($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function post($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function put($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function delete($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function trace($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function options($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function connect($payload,$endpoint);

        /**
         * @param $payload
         * @param $endpoint
         *
         * @return mixed
         */
        public function patch($payload,$endpoint);
    }