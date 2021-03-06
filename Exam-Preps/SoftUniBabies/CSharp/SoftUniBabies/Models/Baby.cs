﻿namespace SoftUniBabies.Models
{
    using System;
    using System.ComponentModel.DataAnnotations;

    public class Baby
    {
        public int Id { get; set; }

        [Required]
        public string Name { get; set; }

        [Required]
        public string Gender { get; set; }

        [Required]
        public string Birthday { get; set; }
    }
}
