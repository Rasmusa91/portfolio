<?php
	class CProjectController extends CControllerBase
	{
        private $projects;

        public function __construct()
        {
        }

		public function load() {
			$this->loadProjects();
		}

        private function loadProjects()
        {
            $sql = "SELECT id, name, description FROM projects";
			$res = $this->di->db->ExecuteSelectQueryAndFetchAll($sql);

            /*
			foreach($res as $val) {
				$this->categories[] = new CCategory($val->id, $val->name);
			}
			return $this->categories;
            */
        }

        public function getProjects() {
            return $this->projects;
        }
    }
