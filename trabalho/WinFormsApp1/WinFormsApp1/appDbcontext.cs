using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Pomelo.EntityFrameworkCore.MySql.Infrastructure;
using MySql.Data;

namespace WinFormsApp1
{
    public class appDbcontext : DbContext
    {
        
        
         public DbSet<Produto> Produto { get; set; }
            protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
            {
                string conn = "server=127.0.0.1;database=cliente;user=root;password=";
                optionsBuilder.UseMySql(conn, ServerVersion.AutoDetect(conn));
            }
       
    }
}
