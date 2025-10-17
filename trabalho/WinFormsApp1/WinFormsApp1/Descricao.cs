using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.ComponentModel.DataAnnotations.Schema;
using Pomelo.EntityFrameworkCore.MySql.Infrastructure;

namespace WinFormsApp1
{
        [Table("cliente")]
        public class Produto
        {
            [Key]
            public int id { get; set; }
            public string nome { get; set; }

           public string descricao { get; set; }

            public int estoque { get; set; }
            public decimal preco { get; set; }
        }
    
}
